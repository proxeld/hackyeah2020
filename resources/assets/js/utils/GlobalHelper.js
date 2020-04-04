import moment from 'moment'
import {
  ALL_TIME,
  CURRENT_MONTH,
  CURRENT_WEEK,
  LAST_12_MONTHS,
  LAST_3_MONTHS,
  LAST_WEEK,
  THIS_YEAR
} from './GlobalConfig'

export const checkNotNull = (el) => {
  return el !== '' && el !== null && el !== undefined
}

export const getNotNull = (value) => {
  return checkNotNull(value) ? value : ''
}

export const filterEntries = (entries, filter, config = {}) => {
  const {dateField = 'date'} = config

  if (filter.kind === 'year') {
    return entries.filter((entry) => entry.get(dateField).format('YYYY') === filter.value)
  }

  switch (filter.value) {
    case ALL_TIME: {
      const start = moment()
      return entries.filter((entry) => entry.get(dateField) <= start)
    }
    case THIS_YEAR: {
      return entries.filter((entry) => entry.get(dateField).format('YYYY') === moment().format('YYYY'))
    }
    case LAST_12_MONTHS: {
      const start = moment()
      const end = moment().subtract(12, 'months')
      return entries.filter((entry) => entry.get(dateField) <= start && entry.get(dateField) >= end)
    }
    case LAST_3_MONTHS: {
      const start = moment()
      const end = moment().subtract(3, 'months')
      return entries.filter((entry) => entry.get(dateField) <= start && entry.get(dateField) >= end)
    }
    case CURRENT_MONTH: {
      const start = moment()
      const end = moment().startOf('month')
      return entries.filter((entry) => entry.get(dateField) <= start && entry.get(dateField) >= end)
    }
    case LAST_WEEK: {
      const start = moment()
      const end = moment().startOf('week').subtract(1, 'week')
      return entries.filter((entry) => entry.get(dateField) <= start && entry.get(dateField) >= end)
    }
    case CURRENT_WEEK: {
      const start = moment()
      const end = moment().startOf('week')
      return entries.filter((entry) => entry.get(dateField) <= start && entry.get(dateField) >= end)
    }
  }
  return entries
}
