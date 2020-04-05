import Helmet from 'react-helmet'
import React, {Fragment} from 'react'
import {getCompanyById} from "../../services/api/companies";
import useAsync from "../../hooks/useAsync";
import formatPrice from "../../utils/formatPrice";
import ShowLoadingOrRender from "../../components/ShowLoadingOrRender";
import {Link} from "react-router-dom";

const ServiceOrder = ({match}) => {
  const {params: {companyId, serviceId}} = match;

  const getCompanyByIdCurried = React.useCallback(() => getCompanyById(companyId), [companyId]);

  const {pending: companyPending, value: company} = useAsync(getCompanyByIdCurried);

  return (
    <Fragment>
      <Helmet>
        <title>Zamów produkt</title>
      </Helmet>

      <ShowLoadingOrRender
        pending={companyPending}
        render={() => (
          <h2>
            Zamów usługę <strong>{company.services.find(service => service.id == serviceId).title}</strong> z firmy <strong>{company.company_name}</strong>.
          </h2>
        )}
      />
    </Fragment>
  )
}

export default ServiceOrder
