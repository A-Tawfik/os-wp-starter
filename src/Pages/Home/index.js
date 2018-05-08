import React, { Component } from 'react';
import API from '../../helpers/api';
import './Home.scss';


class Home extends Component {

  render() {
    console.log( this.props.getPosts() )
    return (

      <div className="Home">
        <h2>Home</h2>
      </div>

    );

  }
}

export default Home;
