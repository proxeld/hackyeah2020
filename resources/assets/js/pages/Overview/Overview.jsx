import Helmet from 'react-helmet'
import React, { Fragment } from 'react'
import { connect } from 'react-redux'

import { currentUserSelector } from 'store/selectors/session'
import { VouchersTable } from '../../components/VouchersTable/VouchersTable';

const OverviewComponent = ({props}) => {
  return (
    <Fragment>
      <Helmet>
        <title>Dashboard</title>
      </Helmet>

      <div className="container mt-5">
        <div className="row">
          <div className="col-12">
            <VouchersTable/>
          </div>
        </div>
      </div>
    </Fragment>
  )
}

export default connect(
  (state) => ({
    user: currentUserSelector(state)
  })
)(OverviewComponent)
