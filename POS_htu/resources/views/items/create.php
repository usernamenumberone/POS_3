<section class="grid">
    <div class="container">
        <form action="/items/store" method="POST" class="d-flex justify-content-center flex-column gap-3 px-5 mb-5 " enctype='multipart/form-data'>
            <div class="image-upload ">
                <label for="file-input">
                    <img src="https://via.placeholder.com/300x300.png?text=UPLOAD" style="pointer-events: none" />
                </label>

                <input id="file-input" type="file" name="img" />
            </div>

            <div id="name-place" class="form-group col-4 mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control mt-2" id="name" name="name">
            </div>
            <div class="row ">
                <div class="form-group col-5 mb-3">
                    <label for="category">Category</label>
                    <select class="form-control mt-2" id="category" name="category">
                        <option hidden>Select an category</option>
                        <option>COFFEE</option>
                        <option>JUICES</option>
                        <option>Milk Pased/option>
                        <option>Deseret</option>
                        <option>Sandwich</option>
                    </select>
                </div>
                <div class="form-group col-5 mb-3">
                    <label for="cost">Cost</label>
                    <input type="number" class="form-control mt-2" id="cost" step="any" name="cost">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-5 mb-3">
                    <label for="selling_price">Selling Price</label>
                    <input type="number" class="form-control mt-2" id="selling_price" step="any" name="selling_price">
                </div>
                <div class="form-group col-5 mb-3">
                    <label for="stock_available">Stock Available</label>
                    <input type="number" class="form-control mt-2" id="stock_available" name="stock_quantity">
                </div>
            </div>
            <button type="submit" class="btn btn-primary col-2 mb-2 mb-3">Add Item</button>
        </form>

    </div>
</section>