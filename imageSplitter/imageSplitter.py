import os
import pygame

def main():

    #### Parameters ###
    spriteSheetPath = "CharactersSpriteSheet.png"
    outputFolderPath = "Characters"
    splitImageFileName = "Character" # character_001, character_002 ... character_100
    frameWidth = 50
    frameHeight = 50
    ###################

    imageSplitter(spriteSheetPath, outputFolderPath, splitImageFileName, 
                  frameWidth, frameHeight)


def imageSplitter(spriteSheetPath, outputFolderPath, splitImageFileName, 
                  frameWidth, frameHeight, paddingX = 0, paddingY = 0):
    # Load the sprite sheet image
    spriteSheet = pygame.image.load(spriteSheetPath)

    # Calculate the number of frames in the sprite sheet
    numFramesX = spriteSheet.get_width() // frameWidth
    numFramesY = spriteSheet.get_height() // frameHeight

    # Create the output folder if it doesn't exist
    os.makedirs(outputFolderPath, exist_ok=True)

    # Extract each frame and save it as a separate PNG file
    frameNumber = 0
    for y in range(numFramesY):
        for x in range(numFramesX):
            frameRect = pygame.Rect(x * frameWidth + paddingX, y * frameHeight + paddingY, frameWidth, frameHeight)
            frameImage = spriteSheet.subsurface(frameRect)
            frameNumber+=1
            output_path = os.path.join(outputFolderPath, f"{splitImageFileName}_{frameNumber:03}.png")
            pygame.image.save(frameImage, output_path)

if __name__ == "__main__":
    main()

