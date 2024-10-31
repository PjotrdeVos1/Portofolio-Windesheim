
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
    1: 'Description for Project 1',
    2: 'Description for Project 2',
    3: 'Description for Project 3',
    4: 'Description for Project 4'
};

    projectDescription.textContent = projectData[projectId] || 'No description available.';
}
});