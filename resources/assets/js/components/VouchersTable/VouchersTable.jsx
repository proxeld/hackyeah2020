import React from 'react'
import {getVoucherList} from '../../services/api/company-vouchers'
import {VoucherStatusEnum} from '../../models/vouchers'
import {Link} from 'react-router-dom'
import './VoucherTable.scss'

const VoucherStatus = ({status}) => {
  const statusMap = {
    [VoucherStatusEnum.PAID]: 'Paid',
    [VoucherStatusEnum.PENDING]: 'Pending',
    [VoucherStatusEnum.REFUNDED]: 'Refunded',
    [VoucherStatusEnum.USED]: 'Used'
  }
  const colorsMap = {
    [VoucherStatusEnum.PAID]: '#11ddee',
    [VoucherStatusEnum.PENDING]: '#1144ee',
    [VoucherStatusEnum.REFUNDED]: '#7d4077',
    [VoucherStatusEnum.USED]: '#cdd53c'
  }
  const statusText = statusMap[status]

  return (
    <div className="voucher-status">
      <span style={{background: colorsMap[status]}}/>&nbsp;
      {statusText}
    </div>
  )
}

const Table = (props) => {
  const {vouchers} = props
  const actions = (voucher) => {
    const status = voucher.status
    if (status === VoucherStatusEnum.PENDING) {
      return (
        <button className="btn btn-sm btn-danger" onClick={props.markAsPaid}>Mark as Paid</button>
      )
    }
  }

  const rows = vouchers.map((voucher, idx) => (
    <tr key={idx}>
      <th scope="row">{idx}</th>
      <td>{voucher.code}</td>
      <td>
        <VoucherStatus status={voucher.status}/>
      </td>
      <td>{voucher.user.first_name} {voucher.user.last_name}</td>
      <td>{voucher.created_at}</td>
      <td>
        <Link to={`/service/${voucher.service.id}`}>
          {voucher.service.title}
        </Link>
      </td>
      <td>
        {actions(voucher)}
      </td>
    </tr>
  ))

  return (
    <div className="vouchers-table">
      <table className="table table-striped">
        <thead>
        <tr>
          <th>#</th>
          <th>Code</th>
          <th>Status</th>
          <th>Applier</th>
          <th>Creation Date</th>
          <th>For service</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {rows}
        </tbody>
      </table>
    </div>
  )
}

export const VouchersTable = () => {
  let [vouchers] = React.useState([
    {
      id: 1,
      code: 'AFSFS',
      status: VoucherStatusEnum.PAID,
      user: {
        first_name: 'John',
        last_name: 'Jane'
      },
      created_at: 'today',
      service: {
        id: 1,
        title: 'Haircut'
      }
    },
    {
      id: 2,
      code: 'GSGSA',
      status: VoucherStatusEnum.REFUNDED,
      user: {
        first_name: 'Mary',
        last_name: 'Jane'
      },
      created_at: 'today',
      service: {
        id: 1,
        title: 'Haircut'
      }
    },
    {
      id: 3,
      code: 'HFSDD',
      status: VoucherStatusEnum.PENDING,
      user: {
        first_name: 'Drake',
        last_name: 'Jane'
      },
      created_at: 'today',
      service: {
        id: 2,
        title: 'Nails'
      }
    },
    {
      id: 3,
      code: 'AFSDD',
      status: VoucherStatusEnum.USED,
      user: {
        first_name: 'Drake',
        last_name: 'Jane'
      },
      created_at: 'today',
      service: {
        id: 3,
        title: 'Lunch'
      }
    }
  ])

  getVoucherList()
    .then((v) => {
      console.log(v)
    })

  return (
    <Table vouchers={vouchers} markAsPaid={console.log('a')}/>
  )
}
