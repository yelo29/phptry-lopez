// AJAX functionality
document.addEventListener('DOMContentLoaded', function() {
    const ajaxBtn = document.getElementById('ajaxBtn');
    const ajaxResult = document.getElementById('ajaxResult');
    
    if (ajaxBtn) {
        ajaxBtn.addEventListener('click', function() {
            // Show loading state
            ajaxBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Loading...';
            ajaxBtn.disabled = true;
            
            // Make AJAX request using Fetch API
            fetch('/api/data', {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                // Display success message
                ajaxResult.innerHTML = `
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle"></i> <strong>Success!</strong> 
                        ${data.message}
                    </div>
                `;
            })
            .catch(error => {
                // Display error message
                ajaxResult.innerHTML = `
                    <div class="alert alert-danger">
                        <i class="fas fa-exclamation-triangle"></i> <strong>Error:</strong> 
                        ${error.message}
                    </div>
                `;
            })
            .finally(() => {
                // Reset button
                ajaxBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Test AJAX';
                ajaxBtn.disabled = false;
            });
        });
    }
    
    // Add smooth scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Add form validation helpers
    const forms = document.querySelectorAll('.needs-validation');
    forms.forEach(form => {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        });
    });
});

// Utility functions
function showToast(message, type = 'info') {
    const toastHtml = `
        <div class="toast align-items-center text-white bg-${type === 'error' ? 'danger' : type === 'success' ? 'success' : 'primary'} border-0" role="alert">
            <div class="d-flex">
                <div class="toast-body">
                    ${message}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
            </div>
        </div>
    `;
    
    const toastContainer = document.createElement('div');
    toastContainer.className = 'toast-container position-fixed bottom-0 end-0 p-3';
    toastContainer.innerHTML = toastHtml;
    
    document.body.appendChild(toastContainer);
    
    const toast = new bootstrap.Toast(toastContainer.querySelector('.toast'));
    toast.show();
    
    // Remove toast element after it's hidden
    toastContainer.querySelector('.toast').addEventListener('hidden.bs.toast', () => {
        toastContainer.remove();
    });
}
