// Load skills from localStorage or use a default list
let skills = JSON.parse(localStorage.getItem('skills'));

if (!skills || skills.length === 0) {
    skills = [
        { name: 'Python', proficiency: 'Expert', tools: 'Flask, Django' },
        { name: 'Java', proficiency: 'Intermediate', tools: 'Spring Boot' },
        { name: 'Bash', proficiency: 'Intermediate', tools: 'Shell Scripting' },
        { name: 'PowerShell', proficiency: 'Intermediate', tools: 'Automation' },
        { name: 'JavaScript', proficiency: 'Advanced', tools: 'React, Node.js' },
        { name: 'SQL', proficiency: 'Advanced', tools: 'PostgreSQL, MySQL' },
        { name: 'YAML', proficiency: 'Intermediate', tools: 'CI/CD Pipelines' },
        { name: 'JSONPath', proficiency: 'Intermediate', tools: 'API Parsing' },

        // Web Development
        { name: 'HTML', proficiency: 'Advanced', tools: 'Semantic HTML' },
        { name: 'CSS', proficiency: 'Advanced', tools: 'SCSS, Tailwind' },
        
        // DevOps Tools
        { name: 'Docker', proficiency: 'Expert', tools: 'Containerization' },
        { name: 'Kubernetes', proficiency: 'Intermediate', tools: 'Orchestration' },
        { name: 'Ansible', proficiency: 'Intermediate', tools: 'Configuration Management' },
        { name: 'Jenkins', proficiency: 'Intermediate', tools: 'CI/CD' },
        { name: 'Grafana', proficiency: 'Intermediate', tools: 'Monitoring' },
        { name: 'Terraform', proficiency: 'Intermediate', tools: 'Infrastructure as Code' },
        { name: 'Prometheus', proficiency: 'Intermediate', tools: 'Metrics & Monitoring' },

        // Cloud Services
        { name: 'AWS', proficiency: 'Intermediate', tools: 'EC2, S3, Lambda' },
        { name: 'GCP', proficiency: 'Intermediate', tools: 'Cloud Run, GKE' }
    ];
    localStorage.setItem('skills', JSON.stringify(skills));
}

// Function to render the skills table
function renderTable() {
    const tableBody = document.querySelector('#skillsTable tbody');
    tableBody.innerHTML = ''; // Clear existing table rows

    skills.forEach((skill, index) => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${skill.name}</td>
            <td>${skill.proficiency}</td>
            <td>${skill.tools}</td>
            <td>
                <button class="edit-btn" data-index="${index}">Edit</button>
                <button class="delete-btn" data-index="${index}">Delete</button>
            </td>
        `;
        tableBody.appendChild(row);
    });

    // Update localStorage after rendering
    localStorage.setItem('skills', JSON.stringify(skills));
}

// Function to add or update a skill
document.getElementById('addSkillForm').addEventListener('submit', function (event) {
    event.preventDefault();

    const name = document.getElementById('skillName').value.trim();
    const proficiency = document.getElementById('proficiencyLevel').value.trim();
    const tools = document.getElementById('tools').value.trim();

    if (name && proficiency && tools) {
        const editingIndex = document.getElementById('addSkillForm').dataset.editingIndex;
        
        if (editingIndex !== undefined) {
            // Update existing skill
            skills[editingIndex] = { name, proficiency, tools };
            delete document.getElementById('addSkillForm').dataset.editingIndex;
        } else {
            // Add new skill
            skills.push({ name, proficiency, tools });
        }

        renderTable();
        event.target.reset();
    }
});

// Event delegation for edit and delete buttons
document.querySelector('#skillsTable tbody').addEventListener('click', function (event) {
    const index = event.target.dataset.index;

    if (event.target.classList.contains('edit-btn')) {
        editSkill(index);
    } else if (event.target.classList.contains('delete-btn')) {
        deleteSkill(index);
    }
});

// Function to edit a skill
function editSkill(index) {
    const skill = skills[index];

    document.getElementById('skillName').value = skill.name;
    document.getElementById('proficiencyLevel').value = skill.proficiency;
    document.getElementById('tools').value = skill.tools;

    document.getElementById('addSkillForm').dataset.editingIndex = index;
}

// Function to delete a skill
function deleteSkill(index) {
    skills.splice(index, 1);
    renderTable();
}

// Initialize the table on page load
document.addEventListener('DOMContentLoaded', renderTable);

document.addEventListener('DOMContentLoaded', function () {
    const proficiencySection = document.querySelector('#skillsTable').closest('article');
    const toggleBtn = document.getElementById('checkProficiencyBtn');

    // Hide the article section by default
    proficiencySection.style.display = 'none';

    toggleBtn.addEventListener('click', function () {
        if (proficiencySection.style.display === 'none') {
            proficiencySection.style.display = 'block'; // Show section
            this.textContent = 'Hide Proficiency';
        } else {
            proficiencySection.style.display = 'none'; // Hide section
            this.textContent = 'Check Proficiency';
        }
    });
});




/**
 * Note for me : Reload the page and check if the table updates.
If not, clear your localStorage manually from DevTools (localStorage.clear() in the console) and reload.
 */