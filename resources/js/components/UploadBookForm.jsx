import { Form } from "react-bootstrap";

function UploadBookForm() {

    const handleChange = (e) => {

      };
    const handleSubmit = async (event) => {
        event.preventDefault();
    };
    

    return (
        <Form onSubmit={handleSubmit}>
            <Form.Group controlId="postTitle">
                <Form.Label>Nombre del libro</Form.Label>
                <Form.Control
                    type="text"
                    name="title"
                    placeholder="titulo del libro"
                    //value={title} necesitamos poner un value para que luego se tome esta info
                    onChange={handleChange}
                />
            </Form.Group>

            <Form.Group controlId="postAuthor">
                <Form.Label>Autor</Form.Label>
                <Form.Control
                    type="text"
                    name="author"
                    placeholder="nombre del autor"
                    //value={author} necesitamos poner un value para que luego se tome esta info
                    onChange={handleChange}
                />
            </Form.Group>

            <Form.Group controlId="postFormat">
                <Form.Label>Formato</Form.Label>
                <Form.Control
                    type="text"
                    name="title"
                    placeholder="papel/braile/audiolibro..."
                    //value={format} necesitamos poner un value para que luego se tome esta info
                    onChange={handleChange}
                />
            </Form.Group>

            <Form.Group controlId="postImage">
                <Form.Label>Imagen</Form.Label>
                <Form.Control
                    type="file"
                    name="image"
                    onChange={handleChange}
                />
            </Form.Group>

            <Form.Group controlId="postComments">
                <Form.Label>Observaciones</Form.Label>
                <Form.Control
                    type="text"
                    name="title"
                    placeholder="subrayos, notas..."
                    //value={comments} necesitamos poner un value para que luego se tome esta info
                    onChange={handleChange}
                />
            </Form.Group>

            <Modal.Footer>
                <button onClick={handleClose}>Cancelar</button>
                <button type="submit">Publicar</button>
            </Modal.Footer>
        </Form>
    );
}

export default UploadBookForm;
