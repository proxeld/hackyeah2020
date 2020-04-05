import Helmet from 'react-helmet'
import React, {Component, Fragment} from 'react'
import {connect} from 'react-redux'

import {currentUserSelector} from 'store/selectors/session'
import {List} from 'immutable'
import {getServiceList} from '../../services/api/company-services'
import Transformer from '../../utils/Transformer'
import ServicesTableExtended from '../../components/ServicesTable/ServicesTableExtended'

class OverviewComponent extends Component {
  constructor(props) {
    super(props)
    this.state = {
      services: List()
    }
    this.handleEdit = ::this.handleEdit
    this.handleDelete = ::this.handleDelete
  }

  componentDidMount() {
    getServiceList()
      .then((v) => {
        this.setState({
          services: List(v.map((s) => Transformer.objectToCamelCase(s)))
        })
      })
  }

  handleEdit(id, data) {
    const {services} = this.state
    this.setState({
      services: services.map((v) => (v.id === id ? Transformer.objectToCamelCase(data) : v))
    })
  }

  handleDelete(id) {
    const {services} = this.state
    this.setState({
      services: services.filter((v) => (v.id !== id))
    })
  }

  render() {
    const {services} = this.state
    return (
      <Fragment>
        <Helmet>
          <title>Services</title>
        </Helmet>

        <ServicesTableExtended services={services} handleEdit={this.handleEdit} handleDelete={this.handleDelete}/>

      </Fragment>
    )
  }
}

export default connect(
  (state) => ({
    user: currentUserSelector(state)
  })
)(OverviewComponent)
