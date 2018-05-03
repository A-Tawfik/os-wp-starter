import React from 'react';
import { render } from 'react-dom';
import './index.css';
import registerServiceWorker from './registerServiceWorker';

// Import Components
import App from './App';
import Page from './Pages/Page';
import Home from './Pages/Home';
import Single from './Pages/Single';


// Import router
import {Router, Route, IndexRoute} from 'react-router';
import { Provider } from 'react-redux';
import store, { history } from './store/store';

const router = (
  <Provider store={store}>

    <Router history={history}>
      <Route path="/" component={App}>
        <IndexRoute component={Home}></IndexRoute>

        <Route path="/:type" component={Page}></Route>
        <Route path="/:type/:postId" component={Single}></Route>

      </Route>
    </Router>

  </Provider>
)

render(router, document.getElementById('root'));

registerServiceWorker();
