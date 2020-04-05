import axios from 'axios'

export const getFinances = () => {
  return axios
    .get('/api/company/finances/vouchers')
    .then(response => response.data.data)
    .catch(error => {
      console.error(error)
    })
}
