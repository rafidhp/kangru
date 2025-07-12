<h2>Create Article</h2>
<form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="title" placeholder="article title" required>
    <label for="image">Article image (optional)</label>
    <input type="file" name="image" id="image">
    <label for="content">Article Content</label>
    <textarea name="content" id="content" cols="30" rows="5" required></textarea>
    <input type="date" name="upload_date" value="{{ date('Y-m-d') }}" required hidden>
    <select name="category_id" required>
        <option disabled selected>Pilih Category</option>
    </select>

    <br><br>
    <button type="submit">Submit</button>
</form>
