class HuisRenderer {
    constructor(canvas) {
        this.context = canvas.getContext('2d');
    }

    moveTo(x, y, xOffset, yOffset, scale) {
        this.context.moveTo((x + xOffset) * scale, (y + yOffset) * scale);
    }

    lineTo(x, y, xOffset, yOffset, scale) {
        this.context.lineTo((x + xOffset) * scale, (y + yOffset) * scale); 
    }

    drawHouse(xOffset = 0, yOffset = 0, scale = 1) {
        const context = this.context;

        // Draw roof
        {
            // Create path
            context.beginPath();
            this.moveTo(300, 100, xOffset, yOffset, scale);
            this.lineTo(700, 200, xOffset, yOffset, scale);
            this.lineTo(600, 400, xOffset, yOffset, scale);
            this.lineTo(200, 300, xOffset, yOffset, scale);
            context.closePath();

            // Fill
            context.fillStyle = 'red';
            context.fill();
            context.stroke();
        }

        // Draw left wall
        {
            // Create path
            context.beginPath();
            this.moveTo(200, 300, xOffset, yOffset, scale);
            this.lineTo(600, 400, xOffset, yOffset, scale);
            this.lineTo(600, 600, xOffset, yOffset, scale);
            this.lineTo(200, 500, xOffset, yOffset, scale);
            context.closePath();

            // Fill
            context.fillStyle = '#888';
            context.fill();
            context.stroke();
        }

        // Draw window
        {
            // Create path
            context.beginPath();
            this.moveTo(250, 350, xOffset, yOffset, scale);
            this.lineTo(550, 425, xOffset, yOffset, scale);
            this.lineTo(550, 500, xOffset, yOffset, scale);
            this.lineTo(250, 425, xOffset, yOffset, scale);
            context.closePath();

            // Fill
            context.fillStyle = '#808fa8';
            context.fill();
            context.stroke();
        }

        // Draw front wall & roof
        {
            // Create path
            context.beginPath();
            this.moveTo(700, 200, xOffset, yOffset, scale);
            this.lineTo(800, 300, xOffset, yOffset, scale);
            this.lineTo(800, 500, xOffset, yOffset, scale);
            this.lineTo(600, 600, xOffset, yOffset, scale);
            this.lineTo(600, 400, xOffset, yOffset, scale);
            context.closePath();

            // Fill
            context.fillStyle = '#555';
            context.fill();
            context.stroke();
        }
    }
}

export default HuisRenderer;