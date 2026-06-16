(function() {
    const form = document.getElementById('loginForm2');
    const emailInput = document.getElementById('loginEmail2');
    const passwordInput = document.getElementById('loginPassword2');
    const rememberCheck = document.getElementById('rememberMe2');
    const feedback = document.getElementById('loginFeedback2');
    const toggleBtn = document.getElementById('togglePassBtn2');
    const eyeIcon = document.getElementById('eyeIcon2');
    const loginBtn = document.getElementById('loginBtn2');

    toggleBtn.addEventListener('click', function(e) {
        e.preventDefault();
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        eyeIcon.classList.toggle('fa-eye');
        eyeIcon.classList.toggle('fa-eye-slash');
    });

    function setFeedback(message, type) {
        feedback.textContent = message;
        feedback.className = '';
        if (type) feedback.classList.add(type);
    }

    async function simulatePhpLogin(email, password) {
        await new Promise(resolve => setTimeout(resolve, 600));
        const cleanEmail = email.trim().toLowerCase();
        const cleanPass = password.trim();
        
        if (!cleanEmail || !cleanPass) {
            return { success: false, message: '✏️ Please fill in all fields.' };
        }
        if (!cleanEmail.includes('@')) {
            return { success: false, message: '✏️ Please enter a valid email.' };
        }
        if (cleanPass.length < 4) {
            return { success: false, message: '✏️ Password must be at least 4 characters.' };
        }
        
        if (cleanEmail === 'demo@project.dev' && cleanPass === 'password123') {
            return { success: true, message: '🎉 Welcome back! Redirecting...' };
        } else {
            return { success: false, message: '😕 Invalid credentials. Try demo@project.dev / password123' };
        }
    }

    form.addEventListener('submit', async function(e) {
        e.preventDefault();
        setFeedback('', '');
        loginBtn.disabled = true;
        loginBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Signing in...';

        const result = await simulatePhpLogin(emailInput.value, passwordInput.value);
        
        if (result.success) {
            setFeedback(result.message, 'success');
            if (rememberCheck.checked) {
                localStorage.setItem('pastel_remember_email', emailInput.value);
            } else {
                localStorage.removeItem('pastel_remember_email');
            }
        } else {
            setFeedback(result.message, 'error');
        }

        loginBtn.disabled = false;
        loginBtn.innerHTML = '<span>Sign In</span> <i class="fas fa-arrow-right"></i>';
    });

    // Load saved email
    const saved = localStorage.getItem('pastel_remember_email');
    if (saved) {
        emailInput.value = saved;
        rememberCheck.checked = true;
    }

    document.getElementById('forgotLink2').addEventListener('click', function(e) {
        e.preventDefault();
        alert('📧 Password reset link sent to your email (demo).');
    });
})();