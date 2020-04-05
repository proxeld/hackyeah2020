import React, {Component} from 'react'
import PropTypes from 'prop-types'
import {Map} from 'immutable'

import SimpleModal from '../Dashboard/SimpleModal'
import SimpleForm from '../Dashboard/SimpleForm'

class ModalVouchers extends Component {
  render() {
    let fields = [
      {
        kind: 'select_voucher_status',
        name: 'voucher_status',
        label: 'Status Vouchera',
        placeholder: 'Status Vouchera'
      }
    ]

    let rules = {
      voucher_status: ''
    }

    const {form, handleClose, handleSubmit, handleFormChange} = this.props

    const content = (<div className="opportunity-entry-form">
      <SimpleForm
        loading={false}
        rules={rules}
        form={form}
        fields={fields}
        handleFileChange={this.handleFileChange}
        handleChange={handleFormChange}
        handleSubmit={handleSubmit}
      />
    </div>)

    const {visible} = this.props
    return (<SimpleModal title="Zmień Status Vouchera"
                         handleClose={handleClose}
                         open={visible}
                         content={content}
                         className="big-modal"/>
    )
  }
}

ModalVouchers.propTypes = {
  handleClose: PropTypes.func,
  handleFormChange: PropTypes.func,
  handleSubmit: PropTypes.func,
  form: PropTypes.instanceOf(Map),
  visible: PropTypes.bool
}

export default ModalVouchers
