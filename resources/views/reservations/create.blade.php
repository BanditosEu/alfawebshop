<form method="POST" action="{{ route('reservations.store') }}">
    @csrf
    <label for="category_id">Category:</label>
    <select name="category_id">
        <!-- Populate categories from your database -->
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>

    <label for="product_id">Product:</label>
    <select name="product_id">
        <!-- Populate products based on the selected category -->
    </select>

    <label for="reservation_date">Reservation Date:</label>
    <input type="date" name="reservation_date">

    <button type="submit">Reserve</button>
</form>
