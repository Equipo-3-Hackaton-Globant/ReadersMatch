import Button from 'react-bootstrap/Button';
import Modal from 'react-bootstrap/Modal';
import { useState } from "react";

function SwapRequestModal({show, handleClose}) {
  return (
    <div>
      <Modal show={show}  onHide={handleClose}>
        <Modal.Body>
          <p>Le avisamos a UsuarioX que te interesa el intercambio.</p>
          <p>Si él/ella está interesado en hacer match se comunicará contigo.</p>
        </Modal.Body>

        <Modal.Footer>
          <Button variant="success" onClick={handleClose}>Cerrar</Button>
        </Modal.Footer>
      </Modal>
    </div>
  );
}

export default SwapRequestModal;