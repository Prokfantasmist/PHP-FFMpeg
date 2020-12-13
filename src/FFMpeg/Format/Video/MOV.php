<?php

namespace FFMpeg\Format\Video;

/**
 * The Mov video format
 */
class MOV extends DefaultVideo
{
    public function __construct($audioCodec = 'aac', $videoCodec = 'qtrle')
    {
        $this
            ->setAudioCodec($audioCodec)
            ->setVideoCodec($videoCodec);
    }

    /**
     * {@inheritDoc}
     */
    public function supportBFrames()
    {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    public function getExtraParams()
    {
        return array('-f', 'mov');
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailableAudioCodecs()
    {
        return array('copy', 'aac');
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailableVideoCodecs()
    {
        return array('qt', 'qtrle');
    }
}
