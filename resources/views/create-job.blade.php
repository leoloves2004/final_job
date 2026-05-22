<h1>Add New Job</h1>

<form method="POST" action="/jobs">
    @csrf

    <label>Title:</label><br>
    <input type="text" name="title" required><br><br>

    <label>Description:</label><br>
    <textarea name="description" required></textarea><br><br>

    <label>Company:</label><br>
    <input type="text" name="company" required><br><br>

    <label>Location:</label><br>
    <input type="text" name="location" required><br><br>

    <label>Salary:</label><br>
    <input type="number" step="0.01" name="salary" required><br><br>

    <button type="submit">Save Job</button>
</form>

<br>

<a href="/">Back</a>