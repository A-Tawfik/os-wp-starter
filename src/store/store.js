import {createStore, compose, applyMiddleware, combineReducers} from 'redux';
import { syncHistoryWithStore, routerReducer } from 'react-router-redux';
import thunk from 'redux-thunk';
import  { browserHistory } from 'react-router';

// Import root reducer
import rootReducer from './reducers/index';

const defaultState = {
    posts: [{
      "id":1,
      "date":"2018-04-27T19:01:33",
      "date_gmt":"2018-04-27T19:01:33",
      "guid":{"rendered":"http://wpreacttemplate.local/?p=1"},
      "modified":"2018-04-27T19:01:33",
      "modified_gmt":"2018-04-27T19:01:33",
      "slug":"hello-world",
      "status":"publish",
      "type":"post",
      "link":"http://wpreacttemplate.local/hello-world/",
      "title":{"rendered":"Hello world!"},
      "content":{"rendered":"<p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!</p>\n",
       "protected":false},
       "excerpt":{"rendered":"<p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!</p>\n",
        "protected":false},
        "author":1,
        "featured_media":0,
        "comment_status":"open",
        "ping_status":"open",
        "sticky":false,
        "template":"",
        "format":"standard",
        "meta":[],
        "categories":[1],
        "tags":[],
        "acf":[],
        "_links":{"self":[{"href":"http://wpreacttemplate.local/wp-json/wp/v2/posts/1"}],
        "collection":[{"href":"http://wpreacttemplate.local/wp-json/wp/v2/posts"}],
        "about":[{"href":"http://wpreacttemplate.local/wp-json/wp/v2/types/post"}],
        "author":[{"embeddable":true,
        "href":"http://wpreacttemplate.local/wp-json/wp/v2/users/1"}],
        "replies":[{"embeddable":true,
        "href":"http://wpreacttemplate.local/wp-json/wp/v2/comments?post=1"}],
        "version-history":[{"href":"http://wpreacttemplate.local/wp-json/wp/v2/posts/1/revisions"}],
        "wp:attachment":[{"href":"http://wpreacttemplate.local/wp-json/wp/v2/media?parent=1"}],
        "wp:term":[{"taxonomy":"category",
        "embeddable":true,
        "href":"http://wpreacttemplate.local/wp-json/wp/v2/categories?post=1"},
        {"taxonomy":"post_tag",
        "embeddable":true,
        "href":"http://wpreacttemplate.local/wp-json/wp/v2/tags?post=1"}],
        "curies":[{"name":"wp",
        "href":"https://api.w.org/{rel}",
        "templated":true}]}
    }
]
};

const consoleLogger = ({getState}) =>  next => action => {
    console.log("will dispatch", action)
    const returnValue = next(action)
    console.log('state after dispatch', getState())
    return returnValue
  }


const enhancers = compose(
  applyMiddleware(thunk,
      consoleLogger),
  //Adds redux dev tools extension capability
  window.__REDUX_DEVTOOLS_EXTENSION__ ? window.__REDUX_DEVTOOLS_EXTENSION__(): f => f

);

const store = createStore(
  rootReducer,
  defaultState,
  enhancers)
export const history = syncHistoryWithStore(browserHistory, store)

if (module.hot) {
  module.hot.accept('./reducers/',()=>{
    const nextRootReducer = require('./reducers/index').default;
    store.replaceReducer(nextRootReducer);
  })
};



export default store;

// (initialState={}) => {
// 	return applyMiddleware(thunk)(store)
// }
