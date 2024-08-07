<?php include 'header.php'; ?>
<link rel="stylesheet" href="../assets/css/style.css">

<main>
    <header>
        <!-- Navigation Menu -->
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>

        <!-- Welcome Section -->
        <section id="welcome">
            <h1>Welcome to My Personal Website</h1>
            <p>This is a test page to verify the setup. Here you'll find updates about my latest projects and blog posts.</p>
        </section>

        <!-- Recent Blog Posts Section -->
            <article>
                <h3>Blog Post Title 1</h3>
                <p>Excerpt from the first blog post. <a href="blog-post1.php">Read more.</a></p>
            </article>
            <article>
                <h3>Blog Post Title 2</h3>
                <p>Excerpt from the second blog post. <a href="blog-post2.php">Read more.</a></p>
            </article>

        <!-- Contact Form Section -->
        <section id="contact">
            <h1>Contact Me</h1>
            <form action="send_message.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                
                <button type="submit">Send Message</button>
            </form>
        </section>
    </header>
</main>

<?php include 'footer.php'; ?>
