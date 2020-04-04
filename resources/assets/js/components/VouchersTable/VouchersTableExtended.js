// import libs
import React, {Component} from 'react'

import './VoucherTable.scss'

import {getVoucherList} from '../../services/api/company-vouchers'
import {List} from 'immutable'
import MTableExtended from '../Tables/MTableExtended'
import DashboardPortlet from '../Dashboard/DashboardPorlet'
import {VoucherStatusEnum} from '../../models/vouchers'
import Transformer from '../../utils/Transformer'
import ModalVouchers from './ModalVouchers'

const statusMap = {
  [VoucherStatusEnum.PAID]: 'Paid',
  [VoucherStatusEnum.PENDING]: 'Pending',
  [VoucherStatusEnum.REFUNDED]: 'Refunded',
  [VoucherStatusEnum.USED]: 'Used'
}
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
    this.state = {
      vouchers: List()
    }
  }

  componentDidMount() {
    getVoucherList()
      .then((v) => {
        this.setState({
          vouchers: List(v.map((s) => Transformer.objectToCamelCase(s)))
        })
      })
  }

  showModal(rowData) {

  }

  getColumns() {
    return [
      {
        title: 'Actions',
        render: (rowData) => {
          return <div className="actions">
            <button onClick={() => this.showModal(rowData)} type="button" className="btn btn-outline-brand btn-icon"><i
              className="fa fa-edit"/></button>
          </div>
        }
      },
      {
        title: 'Status',
        render: (rowData) => {
          const {voucherStatus} = rowData
          const statusText = statusMap[voucherStatus]
          return <div className="voucher-status">
            <span className={`btn btn-elevate btn-${colorsMap[voucherStatus]}`} styleName={`voucher-status`}>
              {statusText}
            </span>
          </div>
        }
      },
      {
        title: 'Code',
        field: 'code'
      },
      {
        title: 'Created At',
        field: 'createdAt'
      }
    ]
  }

  render() {
    const {modalVisible, vouchers} = this.state

    const actions = (<div className="kt-portlet__head-actions">
      <a href="#" className="btn btn-outline-brand btn-bold btn-sm">
        Create
      </a>
    </div>)

    return (<DashboardPortlet actions={actions} title="My Vouchers">
      <ModalVouchers visible={modalVisible}/>
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

export default VouchersTableExtended
