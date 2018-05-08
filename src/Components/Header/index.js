import React, { Component } from 'react';
import { Link } from 'react-router';
import './Header.scss';


class Header extends Component {

  render() {
    let wp = window.wp;
    let mainMenu = wp ? wp.menu.main.map((navItem, index) =>
    <li key={navItem.ID}><Link to={navItem.url.replace(wp.url, "")}>{navItem.title}</Link></li>
    )
    :
    []

    return (

      <div className="Header">
        {mainMenu}
      </div>

    );

  }
}

export default Header;
