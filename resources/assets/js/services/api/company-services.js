import axios from 'axios'

export const getServiceList = () => {
  return axios
    .get('/api/company/services')
    .then(response => response.data.data)
    .catch(error => {
      console.error(error)
    })
}

export const createService = (props) => {
  return axios
    .get('/api/company/services')
    .then(response => response.data.data)
    .catch(error => {
      console.error(error)
    })
}

export const getServiceById = (id) => {
  return axios
    .get(`/api/company/services/${id}`)
    .then(response => response.data.data)
    .catch(error => {
      console.error(error)
    })
}

export const updateService = (id, data) => {
  return axios
    .patch(`/api/company/services/${id}`, data)
    .then(response => response.data.data)
    .catch(error => {
      console.error(error)
    })
}

export const deleteService = (id) => {
  return axios
    .delete(`/api/company/services/${id}`)
    .then(response => response.data.data)
    .catch(error => {
      console.error(error)
    })
}
