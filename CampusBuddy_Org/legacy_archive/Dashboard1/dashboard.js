
document.addEventListener('DOMContentLoaded', function() {
    // ================= FULL SCREEN IMAGE VIEWER =================
    const imageViewer = document.getElementById('imageViewer');
    const viewerImg = imageViewer.querySelector('img');
    const closeBtn = imageViewer.querySelector('.close-btn');
    const prevBtn = imageViewer.querySelector('.nav-prev');
    const nextBtn = imageViewer.querySelector('.nav-next');
    const slides = document.querySelectorAll('.slide img');
    
    let currentImageIndex = 0;
    let imageSources = [];

    // Collect all image sources
    slides.forEach((slide, index) => {
        imageSources.push(slide.src);
        
        // Add click event to each slide
        slide.addEventListener('click', function(e) {
            e.preventDefault();
            currentImageIndex = index;
            showImage(this.src);
        });
    });

    function showImage(src) {
        viewerImg.src = src;
        imageViewer.classList.add('active');
        document.body.style.overflow = 'hidden'; // Prevent background scrolling
    }

    function closeViewer() {
        imageViewer.classList.remove('active');
        document.body.style.overflow = ''; // Restore scrolling
    }

    function navigateImage(direction) {
        if (imageSources.length === 0) return;
        
        if (direction === 'next') {
            currentImageIndex = (currentImageIndex + 1) % imageSources.length;
        } else {
            currentImageIndex = (currentImageIndex - 1 + imageSources.length) % imageSources.length;
        }
        
        viewerImg.src = imageSources[currentImageIndex];
    }

    // Event listeners
    closeBtn.addEventListener('click', closeViewer);
    
    prevBtn.addEventListener('click', function(e) {
        e.stopPropagation();
        navigateImage('prev');
    });
    
    nextBtn.addEventListener('click', function(e) {
        e.stopPropagation();
        navigateImage('next');
    });

    // Close on background click
    imageViewer.addEventListener('click', function(e) {
        if (e.target === imageViewer) {
            closeViewer();
        }
    });

    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (!imageViewer.classList.contains('active')) return;
        
        switch(e.key) {
            case 'Escape':
                closeViewer();
                break;
            case 'ArrowLeft':
                navigateImage('prev');
                break;
            case 'ArrowRight':
                navigateImage('next');
                break;
        }
    });

    // Touch gestures for mobile
    let touchStartX = 0;
    let touchEndX = 0;

    imageViewer.addEventListener('touchstart', function(e) {
        touchStartX = e.changedTouches[0].screenX;
    });

    imageViewer.addEventListener('touchend', function(e) {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    });

    function handleSwipe() {
        const swipeThreshold = 50;
        const diff = touchStartX - touchEndX;
        
        if (Math.abs(diff) > swipeThreshold) {
            if (diff > 0) {
                navigateImage('next'); // Swipe left, go to next
            } else {
                navigateImage('prev'); // Swipe right, go to previous
            }
        }
    }

    // ================= AI BUDDY ANIMATION =================
    const aiBuddy = document.getElementById('aiBuddy');
    const speechBubble = document.getElementById('speechBubble');
    
    if (aiBuddy && speechBubble) {
        // Start slide-in animation
        setTimeout(() => {
            aiBuddy.classList.add('slide-in');
            
            // Show speech bubble after slide-in completes
            setTimeout(() => {
                speechBubble.classList.add('show');
                
                // Start waving animation
                setTimeout(() => {
                    aiBuddy.classList.add('waving');
                    
                    // Stop waving after animation completes
                    setTimeout(() => {
                        aiBuddy.classList.remove('waving');
                        
                        // Start continuous rotation after waving
                        setTimeout(() => {
                            aiBuddy.classList.add('rotating');
                        }, 500);
                        
                    }, 1800); // 3 waves × 0.6s = 1.8s
                    
                }, 500); // Small delay before waving
                
                // Hide speech bubble after some time
                setTimeout(() => {
                    speechBubble.classList.remove('show');
                }, 4000); // Show for 4 seconds
                
            }, 1000); // Wait for slide-in to complete
            
        }, 500); // Small delay after page load
    }
});
