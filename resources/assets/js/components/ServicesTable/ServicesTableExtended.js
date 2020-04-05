// import libs
import React, {Component} from 'react'
import styles from './ServiceTable.scss'
import {List, Map} from 'immutable'
import PropTypes from 'prop-types'

import MTableExtended from '../Tables/MTableExtended'
import DashboardPortlet from '../Dashboard/DashboardPorlet'
import ModalServices from './ModalServices'
import moment from 'moment'
import Transformer from '../../utils/Transformer'
import {deleteService, updateService} from '../../services/api/company-services'
import DeleteServiceModal from './DeleteServiceModal'

class ServicesTableExtended extends Component {
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
    updateService(form.get('id'), form.toObject())
      .then((v) => {
        handleEdit(form.get('id'), v)
        this.closeModal()
      })
  }

  handleDeleteSubmit() {
    const {form} = this.state
    const {handleDelete} = this.props
    deleteService(form.get('id'))
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
        title: 'Tytuł',
        field: 'title'
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
    const {services} = this.props
    const {form, modalVisible, modalDeleteVisible} = this.state

    return (<DashboardPortlet header={null}>
      <ModalServices
        visible={modalVisible}
        handleClose={this.closeModal}
        handleFormChange={this.handleFormChange}
        handleSubmit={this.handleSubmit}
        form={form}
      />
      <DeleteServiceModal
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
            data={services.toArray()}
            options={{
              pageSize: 5
            }}
          />
        </div>
      </div>
    </DashboardPortlet>)
  }
}

ServicesTableExtended.propTypes = {
  handleDelete: PropTypes.func,
  handleEdit: PropTypes.func,
  services: PropTypes.instanceOf(List)
}

export default ServicesTableExtended
