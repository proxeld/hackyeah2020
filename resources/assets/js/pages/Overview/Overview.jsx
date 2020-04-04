import Helmet from 'react-helmet'
import React, { Fragment } from 'react'
import { useModal } from 'react-context-modals'
import { connect } from 'react-redux'

import { NeutralButton } from 'components'
import { currentUserSelector } from 'store/selectors/session'
import { Link } from "react-router-dom";

const OverviewComponent = (props) => {
  const ModalExample = modalProps => <div className="p-16">{modalProps.message}</div>;
  const {user} = props

  const {showModal} = useModal()

  return (
    <Fragment>
      <Helmet>
        <title>Dashboard</title>
      </Helmet>

      <h2 className="text-center mb-5">Hello, {user.first_name}!</h2>

      <div className="mt-4 text-center">
        <Link to="/settings/user">
          <NeutralButton>
            Go to settings
          </NeutralButton>
        </Link>
      </div>
    </Fragment>
  )
}

export default connect(
  (state) => ({
    user: currentUserSelector(state)
  })
)(OverviewComponent)
