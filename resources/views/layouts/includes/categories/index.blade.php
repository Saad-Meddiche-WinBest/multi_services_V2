<section class="section posts-entry">
    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-6">
                <h2 class="posts-entry-title">Categories</h2>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-9">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="blog-entry">
                            <a href="{{ route('societiesByCategory.index', $categories[0]->id) }}" class="img-link">
                                <img src="/storage/{{ $categories[0]->image }}" alt="Image" class="img-fluid">
                            </a>
                            <span class="date">Apr. 14th, 2022</span>
                            <h2><a href="{{ route('societiesByCategory.index', $categories[0]->id) }}">Thought you loved Python? Wait until you meet Rust</a></h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore
                                vel voluptas.</p>
                            <p><a href="{{ route('societiesByCategory.index', $categories[0]->id) }}" class="btn btn-sm btn-outline-primary">Read More</a></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-entry">
                            <a href="{{ route('societiesByCategory.index', $categories[1]->id) }}" class="img-link">
                                <img src="/storage/{{ $categories[1]->image }}" alt="Image" class="img-fluid">
                            </a>
                            <span class="date">Apr. 14th, 2022</span>
                            <h2><a href="{{ route('societiesByCategory.index', $categories[1]->id) }}">Startup vs corporate: What job suits you best?</a></h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore
                                vel voluptas.</p>
                            <p><a href="{{ route('societiesByCategory.index', $categories[1]->id) }}" class="btn btn-sm btn-outline-primary">Read More</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <ul class="list-unstyled blog-entry-sm">
                    <li>
                        <span class="date">Apr. 14th, 2022</span>
                        <h3><a href="#">Don’t assume your user data in the cloud is safe</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel
                            voluptas.</p>
                    </li>

                    <li>
                        <span class="date">Apr. 14th, 2022</span>
                        <h3><a href="#">Meta unveils fees on metaverse sales</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel
                            voluptas.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
