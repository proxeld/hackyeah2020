import axios from 'axios'

export const getServiceList = () => {
  return axios
    .get('/api/services/services')
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

export const createService = (payload) => {
  return axios
    .post('/api/service', payload)
    .then(response => response.data.data)
    .catch(error => {
      console.error(error)
    });
}

export const updateService = (id, payload) => {
  const {
    warning,
    title,
    fee_int,
    fee_currency,
    payment_method,
    payment_status,
    payment_details,
    paid_at
  } = payload;

  return axios
    .patch(`/api/company/services/${id}`, {
      warning,
      title,
      fee_int,
      fee_currency,
      payment_method,
      payment_status,
      payment_details,
      paid_at
    })
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
