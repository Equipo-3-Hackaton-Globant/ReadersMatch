// resources/js/components/Form.js
import React, { useState } from 'react';
import Forml from 'react-bootstrap/Form';


function Form() {
  return (
    <>
      <Forml.Select size="lg">
        <option>Nombre del Autor</option>
      </Forml.Select>
      <br />
      <Forml.Select size="lg">
        <option>Título</option>
      </Forml.Select>
      <br />
      <Forml.Select size="lg">
        <option>Ubicación</option>
      </Forml.Select>
      <br />
      <Forml.Select size="lg">
        <option>Formato</option>
      </Forml.Select>
      <br />
      <Forml.Select size="lg">
        <option>Imagen</option>
      </Forml.Select>
      <br />
      <Forml.Select size="lg" custom-select large-input>
        <option>Observaciones</option>
      </Forml.Select>
      <br />

    </>
  );
}

export default Form;
