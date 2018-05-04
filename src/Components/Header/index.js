import React, { Component } from 'react';
import { Link } from 'react-router';
import './Header.scss';


class Header extends Component {

  render() {

    return (

      <div className="Header">
        {wp.menu.main.map((navItem, index) => {
          console.log(wp.url)
          return (
            <li key={navItem.ID}><Link to={navItem.url.replace(wp.url, "")}>{navItem.title}</Link></li>
          )
        } )}
      </div>

    );

  }
}

export default Header;
