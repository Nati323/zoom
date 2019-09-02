class Zoom {
	constructor(elementId, originImageSrc) {
		const element = document.getElementById(elementId);
		if (!element) {
			throw new Error("Element doesn't exists");
		}
		this.size = 100;
		this.element = element;
		this.originImageSrc = originImageSrc;
		this._initilaize();

	}
	_initilaize() {
		const originImgElement = this.element;
		const zoomElementWrapper = document.createElement('div');
		const zoomElementImg = document.createElement('img');
		zoomElementWrapper.appendChild(zoomElementImg);
		zoomElementImg.src = this.originImageSrc;
		zoomElementImg.addEventListener('load', this._originImageLoaded.bind(this));
		zoomElementWrapper.style.position = zoomElementImg.style.position = 'absolute';
		zoomElementWrapper.style.width = zoomElementWrapper.style.height = `${this.size}px`;
		zoomElementWrapper.style.overflow = 'hidden';
		zoomElementWrapper.style.display = 'none';
		zoomElementWrapper.classList.add('zoom-wrapper');
		const originImgElementWrapper = originImgElement.parentElement;
		originImgElementWrapper.appendChild(zoomElementWrapper);
		this.zoomElementWrapper = zoomElementWrapper;
		this.zoomElementImg = zoomElementImg;
	}
	_originImageLoaded(event) {
		const zoomElementImg = this.zoomElementImg;
		this.zoomedImgWidth = zoomElementImg.naturalWidth;
		this.zoomedImgHheight = zoomElementImg.naturalHeight;
		const originImgElementWrapper = this.element.parentElement;
		originImgElementWrapper.addEventListener('mousemove', this._displayZoom.bind(this));
		originImgElementWrapper.addEventListener('mouseout', this._hideZoom.bind(this));
	}
	_displayZoom(e) {
		const zoomElementWrapper = this.zoomElementWrapper;
		const zoomElementImg = this.zoomElementImg;
		const width = this.zoomedImgWidth;
		const height = this.zoomedImgHheight;
		const size = this.size;
		e = e || window.event;
       	let target = e.target || e.srcElement,
        rect = target.getBoundingClientRect(),
        offsetX = e.clientX - rect.left,
        offsetY = e.clientY - rect.top,
        imgWidth = rect.width,
        imgHeight = rect.height;
        let innerOffsetX = width / imgWidth * offsetX,
        innerOffsetY = height / imgHeight * offsetY;
        innerOffsetY -= size / 2;
        innerOffsetX -= size / 2;
        innerOffsetY = Math.min(height - size, innerOffsetY);
        innerOffsetX = Math.min(width - size, innerOffsetX);
        zoomElementImg.style.top = `-${innerOffsetY}px`;
        zoomElementImg.style.left = `-${innerOffsetX}px`;
        let outerOffsetX = offsetX + 15,
        outerOffsetY = offsetY + 15;
        if (outerOffsetY + size > imgHeight)
            outerOffsetY -= 30 + size;
        if (outerOffsetX + size > imgWidth)
            outerOffsetX -= 30 + size;
        zoomElementWrapper.style.top = `${outerOffsetY}px`;
        zoomElementWrapper.style.left = `${outerOffsetX}px`;
        zoomElementWrapper.style.display = 'block';
	}
	_hideZoom() {
		this.zoomElementWrapper.style.display = 'none';
	}
	adjustSize(newSizePX) {
		this.size = newSizePX;
		this.zoomElementWrapper.style.width = this.zoomElementWrapper.style.height = `${this.size}px`;
	}
}