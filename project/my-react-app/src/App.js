import React from 'react';
import ReactDOM from 'react-dom';
import MyComponent from './MyComponent';

function App() {
  return (
    <div>
      <h1>React App</h1>
      <MyComponent />
    </div>
  );
}

ReactDOM.render(<App />, document.getElementById('root'));
