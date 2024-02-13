class BoomRenderer {
    constructor(canvas) {
        this.context = canvas.getContext('2d');
    }

    moveTo(x, y, xOffset, yOffset, scale) {
        this.context.moveTo((x + xOffset) * scale, (y + yOffset) * scale);
    }

    lineTo(x, y, xOffset, yOffset, scale) {
        this.context.lineTo((x + xOffset) * scale, (y + yOffset) * scale); 
    }

    drawBall(x, y, size, xOffset, yOffset, scale) {
        this.context.arc(
            (x + xOffset) * scale,
            (y + yOffset) * scale,
            size * scale,
            0, Math.PI*2
        );
    }

    drawStar(x, y, radius, xOffset, yOffset, scale) {
        let starLeg = true;
        for (let i = 0; i <= 360; i += 36) {
            let angle = i * (Math.PI / 180);
            let rad = starLeg ? radius : (radius*0.4);

            this.lineTo(
                x - Math.sin(angle) * rad, 
                y - Math.cos(angle) * rad,
                xOffset, yOffset, scale
            );

            starLeg = !starLeg;
        }
    }

    drawTree(xOffset = 0, yOffset = 0, scale = 1) {
        const context = this.context;

        // Draw tree
        {
            // Create path
            context.beginPath();
            this.moveTo(75, 0, xOffset, yOffset, scale);
            this.lineTo(160, 250, xOffset, yOffset, scale);
            this.lineTo(0, 250, xOffset, yOffset, scale);
            context.closePath();

            // Fill
            context.fillStyle = '#008800';
            context.fill();
            context.stroke();
        }

        // Draw trunk
        {
            // Create path
            context.beginPath();
            this.moveTo(55, 250, xOffset, yOffset, scale);
            this.lineTo(105, 250, xOffset, yOffset, scale);
            this.lineTo(105, 325, xOffset, yOffset, scale);
            this.lineTo(55, 325, xOffset, yOffset, scale);
            context.closePath();

            // Fill
            context.fillStyle = '#964B00';
            context.fill();
            context.stroke();
        }
    }

    drawVariantTree(xOffset = 0, yOffset = 0, scale = 1) {
        const context = this.context;
        
        
        // Draw tree
        {
            // Create path
            context.beginPath();
            this.moveTo(0, 0, xOffset, yOffset, scale);
            this.lineTo(160, 0, xOffset, yOffset, scale);
            this.lineTo(160, 250, xOffset, yOffset, scale);
            this.lineTo(0, 250, xOffset, yOffset, scale);
            context.closePath();

            // Fill
            context.fillStyle = '#008800';
            context.fill();
            context.stroke();
        }

        // Draw trunk
        {
            // Create path
            context.beginPath();
            this.moveTo(55, 250, xOffset, yOffset, scale);
            this.lineTo(105, 250, xOffset, yOffset, scale);
            this.lineTo(105, 325, xOffset, yOffset, scale);
            this.lineTo(55, 325, xOffset, yOffset, scale);
            context.closePath();

            // Fill
            context.fillStyle = '#964B00';
            context.fill();
            context.stroke();
        }
    }
}

export default BoomRenderer;