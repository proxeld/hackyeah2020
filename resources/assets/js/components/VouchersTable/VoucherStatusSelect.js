import React, {Component} from 'react'
import PropTypes from 'prop-types'
import {List, Map} from 'immutable'
import {VOUCHER_STATUS_ARRAY} from '../../utils/GlobalConfig'
import SimpleSelect from '../Dashboard/SimpleSelect'

class VoucherStatusSelect extends Component {
  render() {
    const {isMulti = false, errors, label, name, onChange, placeholder = 'Status Vouchera', value} = this.props

    const options = List(VOUCHER_STATUS_ARRAY).map((item) => ({
      value: item.value,
      label: item.name
    }))

    return <SimpleSelect errors={errors} name={name} options={options} onChange={onChange}
                         value={value ? parseInt(value) : value}
                         isClearable={false}
                         isMulti={isMulti}
                         placeholder={placeholder}
                         label={label}/>
  }
}

VoucherStatusSelect.propTypes = {
  errors: PropTypes.instanceOf(Map),
  isMulti: PropTypes.bool,
  label: PropTypes.string,
  name: PropTypes.string.isRequired,
  onChange: PropTypes.func,
  placeholder: PropTypes.string,
  labels: PropTypes.instanceOf(List),
  value: PropTypes.oneOfType([PropTypes.number, PropTypes.array, PropTypes.instanceOf(List)])
}

export default VoucherStatusSelect
