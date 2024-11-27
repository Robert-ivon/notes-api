# Notes API

This is a REST API application for managing personal notes. Features include:

- Create, Read, Update, and Delete notes.
- Notes contain the following attributes:
  - Title
  - Author
  - Date and Time
  - Body
  - Classification (e.g., personal, work, school)
- The application exposes the following routes:
  - `GET /api/notes` - Get all notes
  - `POST /api/notes` - Create a new note
  - `GET /api/notes/{id}` - Get a specific note
  - `PUT /api/notes/{id}` - Update a note
  - `DELETE /api/notes/{id}` - Delete a note


