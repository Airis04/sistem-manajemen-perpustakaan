<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h4>Contact Information</h4>
            <p><strong>Address:</strong> Jl. Raya KM 03 Banjarsari, Kab. Ciamis</p>
            <p><strong>Phone:</strong> 0265650015</p>
            <p><strong>Email:</strong> info@sman1bjrs.sch.id</p>
        </div>
        <div class="col-md-6">
            <h4>Send Us a Message</h4>
            <form action="/contact" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-custom">Send Message</button>
                <div style="margin-bottom: 20px;"></div>
            </form>
        </div>
    </div>
</div>
