import {VoucherStatusEnum, VoucherStatusMap} from '../models/vouchers'

export const THIS_YEAR = 'THIS_YEAR'
export const LAST_12_MONTHS = 'LAST_12_MONTHS'
export const LAST_3_MONTHS = 'LAST_3_MONTHS'
export const ALL_TIME = 'ALL_TIME'
export const CURRENT_MONTH = 'CURRENT_MONTH'
export const LAST_WEEK = 'LAST_WEEK'
export const CURRENT_WEEK = 'CURRENT_WEEK'

export const VOUCHER_RECEIVER_KIND_GUEST = 0
export const VOUCHER_RECEIVER_KIND_CLIENT = 1

export const DEFAULT_DASHBOARD_FINANCE_CHART_FILTERS = [
  {
    name: 'Obecny Miesiąc',
    value: CURRENT_MONTH
  },
  {
    name: 'Ostatni Tydzień',
    value: LAST_WEEK
  },
  {
    name: 'Ten tydzień',
    value: CURRENT_WEEK
  }
]

export const PrimaryColor = '#716aca'

export const COLORS = [
  PrimaryColor,
  '#f4516c',
  '#34bfa3',
  '#ffb822',
  '#36a3f7',
  '#5867dd',
  '#646464'
]

export const VOUCHER_STATUS_ARRAY = [
  {value: VoucherStatusEnum.PENDING, name: VoucherStatusMap[VoucherStatusEnum.PENDING]},
  {value: VoucherStatusEnum.PAID, name: VoucherStatusMap[VoucherStatusEnum.PAID]},
  {value: VoucherStatusEnum.REFUNDED, name: VoucherStatusMap[VoucherStatusEnum.REFUNDED]},
  {value: VoucherStatusEnum.USED, name: VoucherStatusMap[VoucherStatusEnum.USED]}
]
