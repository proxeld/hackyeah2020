export const VoucherStatusEnum = {
  PENDING: 0,
  PAID: 1,
  REFUNDED: 2,
  USED: 3
}

export const VoucherStatusMap = {
  [VoucherStatusEnum.PAID]: 'Zapłacony',
  [VoucherStatusEnum.PENDING]: 'Oczekujący',
  [VoucherStatusEnum.REFUNDED]: 'Zwrócony',
  [VoucherStatusEnum.USED]: 'Wykorzystany'
}
