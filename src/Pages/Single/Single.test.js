import React from 'react';
import ReactDOM from 'react-dom';
import Single from './';

it('renders without crashing', () => {
  const div = document.createElement('div');
  ReactDOM.render(<Single />, div);
  ReactDOM.unmountComponentAtNode(div);
});
