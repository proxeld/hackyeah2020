import React, {Component} from 'react'
import PropTypes from 'prop-types'

import SimpleModal from '../Dashboard/SimpleModal'

class ModalVouchers extends Component {
  render() {
    const content = <div/>
    const {visible} = this.props
    return (<SimpleModal title="Manage Article"
                         handleClose={this.handleChatModalClose}
                         open={visible}
                         content={content}
                         className="big-modal"/>
    )
  }
}

ModalVouchers.propTypes = {
  visible: PropTypes.bool
}

export default ModalVouchers
