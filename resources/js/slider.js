function sliderLogic() {
    return {
        slides: [],
        currentIndex: 0,
        init(slides) {
            this.slides = slides;
        },
        next() {
            if (this.currentIndex < this.slides.length - 1) {
                this.currentIndex++;
                this.updateSlidePosition();
            }
        },
        prev() {
            if (this.currentIndex > 0) {
                this.currentIndex--;
                this.updateSlidePosition();
            }
        },
        updateSlidePosition() {
            this.$refs.sliderWrapper.style.transform = `translateX(-${this.currentIndex * 100}%)`;
        }
    };
}

window.sliderLogic = sliderLogic; // Make it available globally
