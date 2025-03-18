import React from 'react';
import ReactDOM from 'react-dom/client';
import Button from 'react-bootstrap/Button';
import Card from 'react-bootstrap/Card';
import SwapRequestModal from './SwapRequestModal';
import { useState } from 'react';
import FavButton from './FavButton';


function BookDetails() {
    const [show, setShow] = useState(false);
  const handleClose = () => setShow(false);
  const handleShow = () => setShow(true);
    return (
        <>
        <Card>
          <Card.Title>Titulo del libro</Card.Title>
          <FavButton />
          <Card.Text>Publicado por UsuarioX</Card.Text>
          <Card.Img variant="top" src="holder.js/100px180" />
          <Card.Body>
            <Card.Text>Autor:</Card.Text>
            <Card.Text>Ubicación:</Card.Text>
            <Card.Text>Formato:</Card.Text>
            <Card.Text>Observaciones:</Card.Text>
            <Button variant="success" onClick={handleShow}>Intercambiar</Button>
          </Card.Body>
        </Card>
         <SwapRequestModal show={show} handleClose={handleClose}/>
         </>
      );
}

export default BookDetails;


if (document.getElementById('bookdetails')) {
    const Index = ReactDOM.createRoot(document.getElementById("bookdetails"));

    Index.render(
        <React.StrictMode>
            <BookDetails/>
        </React.StrictMode>
    )
}