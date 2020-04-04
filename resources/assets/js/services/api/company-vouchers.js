import axios from 'axios'

export const getVoucherList = () => {
  return axios
    .get('/api/company/vouchers')
    .then(response => response.data.data)
    .catch(error => {
      console.error(error)
    })
}

export const getVoucherById = (id) => {
  return axios
    .get(`/api/company/vouchers/${id}`)
    .then(response => response.data.data)
    .catch(error => {
      console.error(error)
    })
}

export const updateVoucher = (id, status) => {
  return axios
    .patch(`/api/company/vouchers/${id}`, {
      voucher_status: status
    })
    .then(response => response.data.data)
    .catch(error => {
      console.error(error)
    })
}

export const deleteVoucher = (id) => {
  return axios
    .delete(`/api/company/vouchers/${id}`)
    .then(response => response.data.data)
    .catch(error => {
      console.error(error)
    })
}
