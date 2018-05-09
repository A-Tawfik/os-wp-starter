import React, { Component } from 'react';
import API from '../../helpers/api';
import './Home.scss';


class Home extends Component {

    componentWillMount(){
        this.props.getPosts();
    }

  render() {
    return (

      <div className="Home">
          <h2>Home</h2>
      </div>

    );

  }
}

export default Home;
