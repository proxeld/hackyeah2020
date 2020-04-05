import Helmet from 'react-helmet'
import React, {Fragment} from 'react'
import {getCompanyById} from "../../services/api/companies";
import useAsync from "../../hooks/useAsync";
import formatPrice from "../../utils/formatPrice";
import ShowLoadingOrRender from "../../components/ShowLoadingOrRender";
import {Link} from "react-router-dom";

const CompanyProfile = ({match}) => {
  const {params: {id}} = match;

  const getCompanyByIdCurried = React.useCallback(() => getCompanyById(id), [id]);

  const {pending: companyPending, value: company} = useAsync(getCompanyByIdCurried);

  function getDiscountedFee(service) {
    return service.fee_int * (1 - service.discount_int / 100.0)
  }

  return (
    <Fragment>
      <Helmet>
        <title>Profil firmy</title>
      </Helmet>



      <ShowLoadingOrRender
        pending={companyPending}
        render={() => (
          <>
            <div className="kt-grid__item kt-app__toggle kt-app__aside" id="kt_user_profile_aside">
              <div className="kt-portlet kt-portlet--height-fluid-">
                <div className="kt-portlet__head kt-portlet__head--noborder">
                  <div className="kt-portlet__head-label">
                    <h3 className="kt-portlet__head-title">

                    </h3>
                  </div>
                </div>
                <div className="kt-portlet__body">

                  <div className="kt-widget kt-widget--user-profile-2">
                    <div className="kt-widget__head">
                      <div className="kt-widget__media">
                        <img className="kt-widget__img kt-hidden-"
                             src={company.avatar}
                             alt="image"/>
                        <div
                          className="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">
                          MP
                        </div>
                      </div>
                      <div className="kt-widget__info">
                        <a href="#" className="kt-widget__username">
                          {company.first_name} {company.last_name}
                        </a>
                        <span className="kt-widget__desc">
                          {company.company_name}
                        </span>
                      </div>
                    </div>

                    <div className="kt-widget__body">
                      <div className="kt-widget__section">
                        {company.company_description}
                      </div>

                      <div className="kt-widget__item">
                        <div className="kt-widget__contact">
                          <span className="kt-widget__label">Address:</span>
                          <span className="kt-widget__data">{company.company_address}</span>
                        </div>
                      </div>
                    </div>

                    <div className="kt-widget__footer">
                      <a href={`mailto:${company.email}`} className="btn btn-label-success btn-lg btn-upper">write message</a>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div className="kt-grid__item kt-grid__item--fluid kt-app__content">
              <div className="kt-portlet kt-portlet--height-fluid">
                <div className="kt-portlet__head">
                  <div className="kt-portlet__head-label">
                    <h3 className="kt-portlet__head-title">
                      Dostępne usługi i produkty
                    </h3>
                  </div>
                </div>
                <div className="kt-portlet__body">
                  <div className="tab-content">
                    <div className="tab-pane active" id="kt_widget5_tab1_content" aria-expanded="true">
                      <div className="kt-widget5">
                        {company.services.map((service) => (
                          <div key={service.id} className="kt-widget5__item">
                            <div className="kt-widget5__content service-info">
                              <div className="kt-widget5__pic">
                                <img className="kt-widget7__img"
                                     src={service.image}
                                     alt=""/>
                              </div>
                              <div className="kt-widget5__section">
                                <a href="#" className="kt-widget5__title">
                                  {service.title}
                                </a>
                                <p className="kt-widget5__desc">
                                  {service.description}
                                </p>
                              </div>
                            </div>
                            <div className="kt-widget5__content service-price">
                              <div className="kt-widget5__stats">
                                <span className="kt-widget5__sales">Cena dla pomocników</span>
                                <span className="kt-widget5__number price-old">{formatPrice(service.fee_int)}</span>
                                <span className="kt-widget5__number price-new">{formatPrice(getDiscountedFee(service))}</span>
                                <Link to={`/company/${company.id}/service/${service.id}`} className="btn btn-primary">Zamów</Link>
                              </div>
                            </div>
                          </div>
                        ))}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </>
        )}
      />
    </Fragment>
  )
}

export default CompanyProfile
