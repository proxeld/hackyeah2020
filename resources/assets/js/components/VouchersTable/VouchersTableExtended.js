// import libs
import React, {Component} from 'react'
import styles from './VoucherTable.scss'
import {List, Map} from 'immutable'
import PropTypes from 'prop-types'

import MTableExtended from '../Tables/MTableExtended'
import DashboardPortlet from '../Dashboard/DashboardPorlet'
import {VoucherStatusEnum, VoucherStatusMap} from '../../models/vouchers'
import ModalVouchers from './ModalVouchers'
import {VOUCHER_RECEIVER_KIND_GUEST} from '../../utils/GlobalConfig'
import moment from 'moment'
import Transformer from '../../utils/Transformer'
import {deleteVoucher, updateVoucher} from '../../services/api/company-vouchers'
import DeleteVoucherModal from './DeleteVoucherModal'

const colorsMap = {
  [VoucherStatusEnum.PAID]: 'success',
  [VoucherStatusEnum.PENDING]: 'warning',
  [VoucherStatusEnum.REFUNDED]: 'danger',
  [VoucherStatusEnum.USED]: 'info'
}

class VouchersTableExtended extends Component {
  constructor(props) {
    super(props)
    this.getColumns = ::this.getColumns
    this.showModal = ::this.showModal
    this.closeModal = ::this.closeModal
    this.handleFormChange = ::this.handleFormChange
    this.handleSubmit = ::this.handleSubmit

    this.handleDeleteSubmit = ::this.handleDeleteSubmit
    this.showDeleteModal = ::this.showDeleteModal
    this.closeDeleteModal = ::this.closeDeleteModal

    this.state = {
      modalVisible: false,
      modalDeleteVisible: false,
      form: Map()
    }
    moment.locale('pl')
  }

  showModal(rowData) {
    this.setState({
      modalVisible: true,
      form: Map(Transformer.objectToSnakeCase(rowData))
    })
  }

  closeModal() {
    this.setState({
      modalVisible: false,
      form: Map()
    })
  }

  showDeleteModal(rowData) {
    this.setState({
      modalDeleteVisible: true,
      form: Map(Transformer.objectToSnakeCase(rowData))
    })
  }

  closeDeleteModal() {
    this.setState({
      modalDeleteVisible: false,
      form: Map()
    })
  }

  handleFormChange(d) {
    const {name, value} = d
    const {form} = this.state
    this.setState({
      form: form.set(name, value)
    })
  }

  handleSubmit() {
    const {form} = this.state
    const {handleEdit} = this.props
    updateVoucher(form.get('id'), form.get('voucher_status'))
      .then((v) => {
        handleEdit(form.get('id'), v)
        this.closeModal()
      })
  }

  handleDeleteSubmit() {
    const {form} = this.state
    const {handleDelete} = this.props
    deleteVoucher(form.get('id'))
      .then((v) => {
        handleDelete(form.get('id'), v)
        this.closeDeleteModal()
      })
  }

  getColumns() {
    return [
      {
        title: 'Akcje',
        render: (rowData) => {
          return <div className={`actions ${styles.voucherTableActions}`}>
            <button onClick={() => this.showModal(rowData)} type="button" className="btn btn-outline-brand btn-icon"><i
              className="fa fa-edit"/></button>
            <button onClick={() => this.showDeleteModal(rowData)} type="button"
                    className="btn btn-outline-brand btn-icon"><i
              className="fa fa-trash"/></button>
          </div>
        }
      },
      {
        title: 'Kod',
        field: 'code'
      },
      {
        title: 'Status',
        render: (rowData) => {
          const {voucherStatus} = rowData
          const statusText = VoucherStatusMap[voucherStatus]
          return <div className="voucher-status">
            <span className={`btn btn-elevate btn-${colorsMap[voucherStatus]} ${styles.voucherStatus}`}>
              {statusText}
            </span>
          </div>
        }
      },
      {
        title: 'Użytkownik',
        render: (rowData) => {
          const {voucherReceiverKind, voucherReceiverName, voucherReceiverEmail, user} = rowData
          if (voucherReceiverKind === VOUCHER_RECEIVER_KIND_GUEST) {
            return <p>
              {voucherReceiverName}{voucherReceiverEmail && ` (${voucherReceiverEmail})`}
            </p>
          }

          const {firstName, lastName} = user || {}

          return <p>
            {firstName} {lastName}
          </p>
        }
      },
      {
        title: 'Utworzony',
        field: 'createdAt',
        render: (rowData) => {
          return moment(rowData.createdAt).format('MMMM Do YYYY, hh:mm')
        }
      },
      {
        title: 'Zaktulizowany',
        field: 'updatedAt',
        render: (rowData) => {
          return moment(rowData.createdAt).format('MMMM Do YYYY, hh:mm')
        }
      }
    ]
  }

  render() {
    const {vouchers} = this.props
    const {form, modalVisible, modalDeleteVisible} = this.state

    const actions = (<div className="kt-portlet__head-actions">
      <a href="#" className="btn btn-outline-brand btn-bold btn-sm">
        Create
      </a>
    </div>)

    return (<DashboardPortlet actions={actions} title="Vouchery">
      <ModalVouchers
        visible={modalVisible}
        handleClose={this.closeModal}
        handleFormChange={this.handleFormChange}
        handleSubmit={this.handleSubmit}
        form={form}
      />
      <DeleteVoucherModal
        visible={modalDeleteVisible}
        handleClose={this.closeDeleteModal}
        handleSubmit={this.handleDeleteSubmit}
        form={form}
      />
      <div className="table-wrapper">
        <div className="table-content">
          <MTableExtended
            columns={this.getColumns()}
            exportButton={true}
            data={vouchers.toArray()}
            options={{
              pageSize: 5
            }}
          />
        </div>
      </div>
    </DashboardPortlet>)
  }
}

VouchersTableExtended.propTypes = {
  handleDelete: PropTypes.func,
  handleEdit: PropTypes.func,
  vouchers: PropTypes.instanceOf(List)
}

export default VouchersTableExtended
