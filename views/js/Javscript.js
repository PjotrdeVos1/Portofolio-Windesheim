
    document.addEventListener('DOMContentLoaded', function() {
    const projectLinks = document.querySelectorAll('.project-link');
    const projectDescription = document.getElementById('project-description');

    projectLinks.forEach(link => {
    link.addEventListener('click', function(event) {
    event.preventDefault();
    const projectId = this.getAttribute('data-project');
    updateProjectPreview(projectId);
});
});

        function updateProjectPreview(projectId) {
            // You can replace this with actual project data
            const projectData = {
                1: { description: 'Description for Project 1', image: '/pictures/image1.jpg' },
                2: { description: 'Description for Project 2', image: 'path/to/image2.jpg' },
                3: { description: 'Description for Project 3', image: 'path/to/image3.jpg' },
                4: { description: 'Description for Project 4', image: 'path/to/image4.jpg' }
            };

            const project = projectData[projectId] || { description: 'No description available.', image: '' };
            projectDescription.textContent = project.description;
            const projectImage = document.getElementById('project-image');
            if (project.image) {
                projectImage.src = project.image;
                projectImage.style.display = 'block';
            } else {
                projectImage.style.display = 'none';
            }
        }
});