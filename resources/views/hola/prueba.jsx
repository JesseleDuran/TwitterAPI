import layout from './layout.blade.php';

function Hola(props) {
      const name = props.name;

      return React.DOM.h1({
        id: 'Title',
      }, `Hola ${name}`);
}

const hola = React.createElement(Hola, {
      name: 'MUNDO',
    });

ReactDOM.render(
      hola,
      document.getElementById('render-target')
);

setTimeout(
      () => {
        ReactDOM.render(
          React.createElement(Hola, { name: 'Mundo!' }),
          document.getElementById('app')
        );
      },
      1000
);
