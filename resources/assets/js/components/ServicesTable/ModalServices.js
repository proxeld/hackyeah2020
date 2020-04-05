import React, {Component} from 'react'
import PropTypes from 'prop-types'
import {Map} from 'immutable'

import SimpleModal from '../Dashboard/SimpleModal'
import SimpleForm from '../Dashboard/SimpleForm'

class ModalServices extends Component {
  render() {
    let fields = [
      {
        kind: 'input',
        name: 'title',
        label: 'Tytuł Usługi',
        placeholder: 'Tytuł Usługi'
      },
      {
        kind: 'input',
        name: 'description',
        label: 'Opis Usługi',
        placeholder: 'Opis Usługi'
      },
      {
        kind: 'input',
        name: 'max_voucher_numbers',
        label: 'Maksymalna Liczba Kuponów',
        placeholder: 'Maksymalna Liczba Kuponów'
      },
      {
        kind: 'input',
        name: 'fee_int',
        label: 'Cena Usługi / Produktu',
        placeholder: 'Cena Usługi / Produktu'
      },
      {
        kind: 'input',
        name: 'discount_int',
        label: 'Zniżka',
        placeholder: 'Zniżka'
      }
    ]

    let rules = {
      title: '',
      max_voucher_numbers: '',
      fee_int: '',
      discount_int: '',
      description: ''
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
    return (<SimpleModal title="Dodaj / Edytuj Usługę"
                         handleClose={handleClose}
                         open={visible}
                         content={content}
                         className="big-modal"/>
    )
  }
}

ModalServices.propTypes = {
  handleClose: PropTypes.func,
  handleFormChange: PropTypes.func,
  handleSubmit: PropTypes.func,
  form: PropTypes.instanceOf(Map),
  visible: PropTypes.bool
}

export default ModalServices
