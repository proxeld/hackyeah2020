import React from 'react'
import logo from '../../../img/logo.png'
import logoWhite from '../../../img/logo_white.png'
import {Link} from "react-router-dom";

const ClientSiteLayout = ({children, pageName}) => {
  return (
    <>
      <div className="kt-grid kt-grid--hor kt-grid--root">
        <div className="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
          <div className="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

            <div className="header">
              <div className="logo">
                <img src={logo} />
              </div>
              <ul className="top-menu">
                <li><Link to="/">Strona główna</Link></li>
                <li><Link to="#">Kontakt</Link></li>
              </ul>
            </div>

            <div className="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch"
                 id="kt_body">
              <div className="kt-content kt-content--fit-top  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor"
                   id="kt_content">

                <div className="kt-container  kt-grid__item kt-grid__item--fluid">


                  <div className="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
                    {children}
                  </div>
                </div>
              </div>
            </div>

            <div className="kt-footer  kt-footer--extended  kt-grid__item" id="kt_footer">
              <div className="kt-footer__top">
                <div className="kt-container ">
                  <div className="row">
                    <div className="col-lg-4">
                      <div className="kt-footer__section">
                        <h3 className="kt-footer__title">About</h3>
                        <div className="kt-footer__content">
                          W czasach epidemii wiele biznesów straciło z dnia na dzień źródło finansowania. Wesprzyj
                          swoich ulubionych usługodawców i pomóż im przetrwać ten ciężki okres.
                        </div>
                      </div>
                    </div>
                    <div className="col-lg-4">
                      <div className="kt-footer__section">
                        <h3 className="kt-footer__title">Szybki dostęp</h3>
                        <div className="kt-footer__content">
                          <div className="kt-footer__nav">
                            <div className="kt-footer__nav-section">
                              <Link to="/">Strona główna</Link>
                              <Link to="#">Kontakt</Link>
                            </div>
                            <div className="kt-footer__nav-section">
                              {/*<a href="#">User Setting</a>*/}
                              {/*<a href="#">Custom Pages</a>*/}
                              {/*<a href="#">Intranet Settings</a>*/}
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div className="kt-footer__bottom">
                <div className="kt-container ">
                  <div className="kt-footer__wrapper">
                    <div className="kt-footer__logo">
                      <a className="kt-header__brand-logo" href="?page=index&amp;demo=demo2">
                        <img alt="Logo"
                             src={logoWhite}
                             className="kt-header__brand-logo-sticky"/>
                      </a>
                      <div className="kt-footer__copyright">
                        2020&nbsp;©&nbsp;
                        <div>Created during HackYeah 2020</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </>
  )
}

export default ClientSiteLayout
