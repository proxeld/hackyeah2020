import axios from 'axios'

export const getCompanyById = (id) => {
  return axios
    .get(`/api/guest/user-companies/${id}`)
    .then(response => response.data.data)
    .catch(error => {
      console.error(error)
    })
}
