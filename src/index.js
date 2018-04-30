import React from 'react';
import { render } from 'react-dom';
import './index.css';
import registerServiceWorker from './registerServiceWorker';

// Import Components
import App from './App/App';
import Page from './Pages/Page/Page';
import Single from './Pages/Single/Single';


// Import router
import {Router, Route, IndexRoute} from 'react-router';
import { Provider } from 'react-redux';
import store, { history } from './store';

const router = (
  <Provider store={store}>

    <Router history={history}>
      <Route path="/" component={App}>
        <IndexRoute component={Page}></IndexRoute>
        <Route path="/view/:postId" component={Single}></Route>
      </Route>
    </Router>
  </Provider>
)

render(router, document.getElementById('root'));

registerServiceWorker();
